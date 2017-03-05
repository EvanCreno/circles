<?php
/**
 * Circles - bring cloud-users closer
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@pontapreta.net>
 * @copyright 2017
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Activity\Tests\AppInfo;

use OCA\Circles\Tests\TestCase;

/**
 * Class AppTest
 *
 * @group DB
 * @package OCA\Circles\Tests\AppInfo
 */
class AppTest extends \PHPUnit_Framework_TestCase {

	public function testNavigationEntry() {

		$navigationManager = \OC::$server->getNavigationManager();
		$navigationManager->clear();
		$countBefore = count($navigationManager->getAll());

		require '../appinfo/app.php';

		$this->assertCount($countBefore + 1, $navigationManager->getAll());
	}


}