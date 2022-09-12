<?php 
session_start();
$room_id = $_SESSION['room_Id'];
?>
<div id="reportModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="reportForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i>Report</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="subject" class="control-label">ปัญหา</label>
						<input type="text" class="form-control" id="subject" name="subject" required>
					</div>
					<div class="form-group">
						<label for="building" class="control-label">อาคาร</label>
						<select id="building_Id" name="building_Id" class="form-control" placeholder="อาคาร...">
							<?php $reports->getBuildings(); ?>
						</select>
					</div>
					<div class="form-group" id="roomhide">
						<label for="room" class="control-label">ห้อง</label>
						<select id="room_Id" name="room_Id" class="form-control" placeholder="ห้อง...">
							<?php $reports->getRooms(); ?>
						</select>
					</div>

					<div class="form-group" id="comhide">
						<label for="com" name="com"  class="control-label">คอมพิวเตอร์</label><br>
						<!-- <input type="checkbox" name="com_id" value=""><br/> -->
						<?php $reports->getComs($room_id); ?>
						
					</div>

					<div class="form-group">
						<label for="repairtype" class="control-label">ประเภทอุปกรณ์</label>
						<select id="repairtype_id" name="repairtype_id" class="form-control" placeholder="Repairtype...">
							<?php $reports->getRepairtypes(); ?>
						</select>
					</div>
					<div class="form-group">
						<label for="message" class="control-label">รายละเอียด</label>
						<textarea class="form-control" rows="5" id="message" name="message"></textarea>
					</div>
					<div class="form-group" id="statushide">
						<?php if (isset($_SESSION["admin"])) { ?>
							<label for="status" class="control-label">สถานะ</label>
							<label class="radio-inline">
								<!-- <input type="radio" name="status" id="open" value="0" checked required>กำลังเนินการ -->
								<input type="radio" name="status" id="open" value="0" checked>กำลังเนินการ
							</label>

							<label class="radio-inline">
								<input type="radio" name="status" id="close" value="1">เสร็จแล้ว
							</label>

							<label class="radio-inline">
								<input type="radio" name="status" id="fail" value="2">ซ่อมไม่ได้
							</label>
						<?php } ?>
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="reportId" id="reportId" />
					<input type="hidden" name="action" id="action" value="" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
				</div>
			</div>
		</form>
	</div>
</div>