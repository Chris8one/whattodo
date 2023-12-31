<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Chris Larsson <chris_larsson@outlook.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\WhatToDo\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'whattodo';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
