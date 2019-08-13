<?php

namespace Novius\Backpack\CRUD\PanelTraits;

trait Boxes
{
    public $sideBoxesEnabled = false;
    public $boxesOptions = [];
    public $defaultBox = null;

    public function enableSideBoxes() : bool
    {
        $this->sideBoxesEnabled = true;

        return $this->sideBoxesEnabled;
    }

    public function disableSideBoxes() : bool
    {
        $this->sideBoxesEnabled = false;

        return $this->sideBoxesEnabled;
    }

    public function sideBoxesEnabled() : bool
    {
        return $this->sideBoxesEnabled;
    }

    public function sideBoxesDisabled() : bool
    {
        return ! $this->sideBoxesEnabled;
    }

    public function boxExists(string $label) : bool
    {
        $boxes = $this->getBoxes();

        return in_array($label, $boxes);
    }

    public function getLastBox()
    {
        $boxes = $this->getBoxes();

        // A default box is manually defined, we have to return it
        if ($this->defaultBox !== null) {
            return $this->defaultBox;
        }

        if (count($boxes)) {
            return last($boxes);
        }

        return false;
    }

    public function isLastBox(string $label)
    {
        return $this->getLastBox() === $label;
    }

    public function getBoxFields(string $label)
    {
        if ($this->boxExists($label)) {
            $all_fields = $this->getCurrentFields();

            $fields_for_current_box = collect($all_fields)->filter(function ($value, $key) use ($label) {
                return isset($value['box']) && $value['box'] === $label;
            });

            if ($this->isLastBox($label)) {
                $fields_without_a_box = collect($all_fields)->filter(function ($value, $key) {
                    return ! isset($value['box']);
                });

                $fields_for_current_box = $fields_for_current_box->merge($fields_without_a_box);
            }

            return $fields_for_current_box;
        }

        return [];
    }

    public function setBoxOptions(string $label, array $options)
    {
        $this->boxesOptions[$label] = $options;

        // if a "side" box was mentioned, we should enable it
        if (! empty($options['side'])) {
            $this->enableSideBoxes();
        }
    }

    public function getBoxOptions(string $label) : array
    {
        $boxOptions = [
            'side' => false,
            'class' => '',
            'collapsed' => false,
        ];

        if (isset($this->boxesOptions[$label])) {
            $boxOptions = array_merge($boxOptions, $this->boxesOptions[$label]);
        }

        if ($boxOptions['collapsed']) {
            $boxOptions['class'] = trim($boxOptions['class'].' collapsed-box');
        }

        return $boxOptions;
    }

    public function setDefaultBox(string $defaultBoxName) : void
    {
        $this->defaultBox = $defaultBoxName;
    }

    public function getBoxes($columnFilter = null) : array
    {
        $boxes = [];
        $fields = $this->getCurrentFields();

        // If DefaultBox is defined manually, we have to add it
        if ($this->defaultBox !== null && ($columnFilter === 'side' xor ! $this->getBoxOptions($this->defaultBox)['side'])) {
            $boxes[] = $this->defaultBox;
        }

        // Find all boxes using fields
        collect($fields)
            ->filter(function ($value, $key) {
                return isset($value['box']);
            })
            ->each(function ($value, $key) use (&$boxes, $columnFilter) {
                if (! isset($columnFilter) || ($columnFilter === 'side' xor ! $this->getBoxOptions($value['box'])['side'])) {
                    if (! in_array($value['box'], $boxes)) {
                        $boxes[] = $value['box'];
                    }
                }
            });

        // Add an automatic DefaultBox if needle
        if (empty($boxes) && $columnFilter !== 'side') {
            $boxes[] = ucfirst($this->entity_name);
        }

        return $boxes;
    }
}
