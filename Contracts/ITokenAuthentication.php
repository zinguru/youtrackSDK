<?php
namespace Zinguru\YoutrackSDK\Contracts;

interface ITokenAuthentication
{
        public function getToken(): string;

        public function getApiURL(): string;
}