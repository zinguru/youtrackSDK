<?php
namespace Zinguru\YoutrackSDK\Entities\CustomFields\ValueHolders;

use Zinguru\YoutrackSDK\Contracts\IFieldValueHolder;

abstract class AbstractValueHolder implements IFieldValueHolder
{
        private string $type;

        protected mixed $value;

        public function __construct(string $type) {
                $this->type = $type;
        }

        /**
         * @return string
         */
        public function getType(): string {
                return $this->type;
        }

        abstract function setValue(mixed $value): void;
}