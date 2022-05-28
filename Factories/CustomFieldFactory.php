<?php

namespace Zinguru\YoutrackSDK\Factories;

use Zinguru\YoutrackSDK\Contracts\ICustomField;
use Zinguru\YoutrackSDK\Entities\CustomFields\EnumField;
use Zinguru\YoutrackSDK\Entities\CustomFields\MultiEnumField;
use Zinguru\YoutrackSDK\Entities\CustomFields\SimpleTextField;
use Zinguru\YoutrackSDK\Entities\CustomFields\StateField;
use Zinguru\YoutrackSDK\Entities\CustomFields\TextField;
use Zinguru\YoutrackSDK\Entities\CustomFields\UserField;

class CustomFieldFactory
{
        public static function makeFieldFromArray(
                string $name,
                string $type,
                mixed  $value
        ): ICustomField {
                $field = match ($type) {
                        'SimpleIssueCustomField' => new SimpleTextField($name, $type, $value),
                        'SingleEnumIssueCustomField' => new EnumField($name, $type, $value),
                        'StateIssueCustomField' => new StateField($name, $type, $value),
                        'MultiEnumIssueCustomField' => new MultiEnumField($name, $type, $value),
                        'SingleUserIssueCustomField' => new UserField($name, $type, $value),
                        'TextIssueCustomField' => new TextField($name, $type, $value),
                        default => throw new \Exception("I don't know about type {$type}"),
                };

                return $field;
        }
}