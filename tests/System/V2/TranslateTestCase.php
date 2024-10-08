<?php
/**
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Translate\Tests\System\V2;

use Google\Cloud\Translate\TranslateClient;
use PHPUnit\Framework\TestCase;

class TranslateTestCase extends TestCase
{
    protected static $hasSetUp = false;
    protected static $client;

    /**
     * @beforeClass
     */
    public static function setUpTestFixtures(): void
    {
        if (self::$hasSetUp) {
            return;
        }

        $keyFilePath = getenv('GOOGLE_CLOUD_PHP_TESTS_KEY_PATH');

        self::$client = new TranslateClient([
            'keyFilePath' => $keyFilePath
        ]);
    }
}
