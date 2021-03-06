<?php
/**
 * Files_FullTextSearch - Index the content of your files
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@artificial-owl.com>
 * @copyright 2018
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

use OCA\Files_FullTextSearch\AppInfo\Application;
use OCP\Util;

Util::addScript(Application::APP_NAME, 'admin.elements');
Util::addScript(Application::APP_NAME, 'admin.settings');
Util::addScript(Application::APP_NAME, 'admin');

?>

<div id="files" class="section" style="display: none;">
	<h2><?php p($l->t('Files')) ?></h2>

	<h3 class="hsub">Sources</h3>
	<div class="div-table">
		<div class="div-table-row">
			<div class="div-table-col div-table-col-left">
				<span class="leftcol">Local Files:</span>
				<br/>
				<em>Index the content of local files.</em>
			</div>
			<div class="div-table-col">
				<input type="checkbox" id="files_local" value="1"/>
			</div>
		</div>

		<div class="div-table-row">
			<div class="div-table-col div-table-col-left">
				<span class="leftcol">External Files:</span>
				<br/>
				<em>Index the content of external files.</em>
			</div>
			<div class="div-table-col">
				<input type="checkbox" id="files_external" value="1"/>
			</div>
		</div>

		<!--<div class="div-table-row">
			<div class="div-table-col div-table-col-left">
				<span class="leftcol">Encrypted Files:</span>
				<br/>
				<em>Index the content of encrypted files.</em>
			</div>
			<div class="div-table-col">
				<input type="checkbox" id="files_encrypted" value="1"/>
			</div>
		</div>

		<div class="div-table-row">
			<div class="div-table-col div-table-col-left">
				<span class="leftcol">Federate Shares:</span>
				<br/>
				<em>Index the content of federated shares.</em>
			</div>
			<div class="div-table-col">
				<input type="checkbox" id="files_federated" value="1"/>
			</div>
		</div>
	</div>-->

		<h3 class="hsub">Types</h3>
		<div class="div-table">
			<div class="div-table-row">
				<div class="div-table-col div-table-col-left">
					<span class="leftcol">Maximum file size:</span>
					<br/>
					<em>Maximum file size to index (in Mb).</em>
				</div>
				<div class="div-table-col">
					<input type="text" class="small" id="files_maxsize" value="20"/>
				</div>
			</div>

			<div class="div-table-row">
				<div class="div-table-col div-table-col-left">
					<span class="leftcol">Extract PDF:</span>
					<br/>
					<em>Index the content of PDF files.</em>
				</div>
				<div class="div-table-col">
					<input type="checkbox" id="files_pdf" value="1"/>
				</div>
			</div>

			<div class="div-table-row">
				<div class="div-table-col div-table-col-left">
					<span class="leftcol">Extract Office:</span>
					<br/>
					<em>Index the content of office files.</em>
				</div>
				<div class="div-table-col">
					<input type="checkbox" id="files_office" value="1"/>
				</div>
			</div>

			<!--<div class="div-table-row">
				<div class="div-table-col div-table-col-left">
					<span class="leftcol">Index images:</span>
					<br/>
					<em>Index the content of image files.</em>
				</div>
				<div class="div-table-col">
					<input type="checkbox" id="files_image" value="1"/>
				</div>
			</div>

			<div class="div-table-row">
				<div class="div-table-col div-table-col-left">
					<span class="leftcol">Index audio:</span>
					<br/>
					<em>Index the content of audio files.</em>
				</div>
				<div class="div-table-col">
					<input type="checkbox" id="files_audio" value="1"/>
				</div>
			</div>
	-->

		</div>
	</div>

</div>