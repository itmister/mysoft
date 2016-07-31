<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:56:"F:\www\my\public/../application/admin\view\user\add.html";i:1467137429;}*/ ?>


	<page-title ng-if="layoutOptions.pageTitles" title="Add Member" description="Interface for adding new members using our styled forms."></page-title>



<form method="post">
	<div class="panel panel-headerless">
		<div class="panel-body">

			<div class="member-form-add-header">
				<div class="row">
					<div class="col-md-2 col-sm-4 pull-right-sm">

						<div class="action-buttons">
							<button type="submit" class="btn btn-block btn-secondary">Save Changes</button>
							<button type="reset" class="btn btn-block btn-gray">Reset to Default</button>
						</div>

					</div>
					<div class="col-md-10 col-sm-8">

						<div class="user-img">
							<img src="/assets/images/user-4.png" class="img-circle" alt="user-pic" />
						</div>
						<div class="user-name">
							<a href="">彭廷芳</a>
							<span>管理员</span>
						</div>

					</div>
				</div>
			</div>


			<div class="member-form-inputs">
				<div class="row">
					<div class="col-sm-3">
						<label class="control-label" for="username">登入账号</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="username" id="username" value="" />
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
						<label class="control-label" for="name">登陆密码</label>
					</div>
					<div class="col-sm-9">
						<input type="password" class="form-control" name="password" id="password" value="" />
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
						<label class="control-label" for="username">姓名</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="username" id="username" value=""  />
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-3">
						<label class="control-label" for="birthdate">生日</label>
					</div>
					<div class="col-sm-9">
						<div class="input-group">
							<input type="text" class="form-control datepicker" name="birthdate" data-format="yyyy-mm-dd" value="">

							<div class="input-group-addon">
								<a href=""><i class="linecons-calendar"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
						<label class="control-label" for="username">手机号</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="username" id="username" value="" />
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-3">
						<label class="control-label" for="username">邮箱</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="username" id="username" value=""  />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<label class="control-label">Country</label>
					</div>
					<div class="col-sm-9">
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#s2example-1").select2({
									placeholder: 'Select your country...',
									allowClear: true
								}).on('select2-open', function()
								{
									// Adding Custom Scrollbar
									$(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
								});

							});
						</script>

						<select class="form-control" id="s2example-1">
							<option></option>
							<optgroup label="North America">
								<option>Alabama</option>
								<option>Alaska</option>
								<option>Arizona</option>
								<option>Arkansas</option>
								<option selected>California</option>
								<option>Colorado</option>
								<option>Connecticut</option>
								<option>Delaware</option>
								<option>Florida</option>
								<option>Georgia</option>
								<option>Hawaii</option>
								<option>Idaho</option>
								<option>Illinois</option>
								<option>Indiana</option>
								<option>Iowa</option>
								<option>Kansas</option>
								<option>Kentucky[C]</option>
								<option>Louisiana</option>
								<option>Maine</option>
								<option>Maryland</option>
								<option>Massachusetts[D]</option>
								<option>Michigan</option>
								<option>Minnesota</option>
								<option>Mississippi</option>
								<option>Missouri</option>
								<option>Montana</option>
								<option>Nebraska</option>
								<option>Nevada</option>
								<option>New Hampshire</option>
								<option>New Jersey</option>
								<option>New Mexico</option>
								<option>New York</option>
								<option>North Carolina</option>
								<option>North Dakota</option>
								<option>Ohio</option>
								<option>Oklahoma</option>
								<option>Oregon</option>
								<option>Pennsylvania[E]</option>
								<option>Rhode Island[F]</option>
								<option>South Carolina</option>
								<option>South Dakota</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Utah</option>
								<option>Vermont</option>
								<option>Virginia[G]</option>
								<option>Washington</option>
								<option>West Virginia</option>
								<option>Wisconsin</option>
								<option>Wyoming</option>
							</optgroup>
							<optgroup label="Europe">
								<option>Albania</option>
								<option>Andorra</option>
								<option>Armenia</option>
								<option>Austria</option>
								<option>Azerbaijan</option>
								<option>Belarus</option>
								<option>Belgium</option>
								<option>Bosnia & Herzegovina</option>
								<option>Bulgaria</option>
								<option>Croatia</option>
								<option>Cyprus</option>
								<option>Czech Republic</option>
								<option>Denmark</option>
								<option>Estonia</option>
								<option>Finland</option>
								<option>France</option>
								<option>Georgia</option>
								<option>Germany</option>
								<option>Greece</option>
								<option>Hungary</option>
								<option>Iceland</option>
								<option>Ireland</option>
								<option>Italy</option>
								<option>Kosovo</option>
								<option>Latvia</option>
								<option>Liechtenstein</option>
								<option>Lithuania</option>
								<option>Luxembourg</option>
								<option>Macedonia</option>
								<option>Malta</option>
								<option>Moldova</option>
								<option>Monaco</option>
								<option>Montenegro</option>
								<option>The Netherlands</option>
								<option>Norway</option>
								<option>Poland</option>
								<option>Portugal</option>
								<option>Romania</option>
								<option>Russia</option>
								<option>San Marino</option>
								<option>Serbia</option>
								<option>Slovakia</option>
								<option>Slovenia</option>
								<option>Spain</option>
								<option>Sweden</option>
								<option>Switzerland</option>
								<option>Turkey</option>
								<option>Ukraine</option>
								<option>United Kingdom</option>
								<option>Vatican City (Holy See)</option>
							</optgroup>
							<optgroup label="Asia">
								<option>Afghanistan</option>
								<option>Bahrain</option>
								<option>Bangladesh</option>
								<option>Bhutan</option>
								<option>Brunei</option>
								<option>Cambodia</option>
								<option>China</option>
								<option>East Timor</option>
								<option>India</option>
								<option>Indonesia</option>
								<option>Iran</option>
								<option>Iraq</option>
								<option>Israel</option>
								<option>Japan</option>
								<option>Jordan</option>
								<option>Kazakhstan</option>
								<option>Korea North</option>
								<option>Korea South</option>
								<option>Kuwait</option>
								<option>Kyrgyzstan</option>
								<option>Laos</option>
								<option>Lebanon</option>
								<option>Malaysia</option>
								<option>Maldives</option>
								<option>Mongolia</option>
								<option>Myanmar (Burma)</option>
								<option>Nepal</option>
								<option>Oman</option>
								<option>Pakistan</option>
								<option>The Philippines</option>
								<option>Qatar</option>
								<option>Russia</option>
								<option>Saudi Arabia</option>
								<option>Singapore</option>
								<option>Sri Lanka</option>
								<option>Syria</option>
								<option>Taiwan</option>
								<option>Tajikistan</option>
								<option>Thailand</option>
								<option>Turkey</option>
								<option>Turkmenistan</option>
								<option>United Arab Emirates</option>
								<option>Uzbekistan</option>
								<option>Vietnam</option>
								<option>Yemen</option>
							</optgroup>
						</select>

					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
						<label class="control-label">Dashboard Widgets</label>
					</div>
					<div class="col-sm-9">

						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								$("#multi-select").multiSelect({
									afterInit: function()
									{
										// Add alternative scrollbar to list
										this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar();
									},
									afterSelect: function()
									{
										// Update scrollbar size
										this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar('update');
									}
								});
							});
						</script>
						<select class="form-control" multiple="multiple" id="multi-select" name="my-select[]">
							<option value="1" selected>Dashboard Info</option>
							<option value="2" selected>Latest News</option>
							<option value="3">Currency</option>
							<option value="4">Shopping Cart</option>
							<option value="5">Products</option>
							<option value="6" selected>Blog Posts</option>
							<option value="7">Add New Product</option>
							<option value="8" selected>Analytics</option>
							<option value="9" selected>Emails</option>
							<option value="10" selected>Users Management</option>
						</select>


					</div>
				</div>

				<div class="row">
					<div class="col-sm-3">
						<label class="control-label">Newsletter Subscribe</label>
					</div>
					<div class="col-sm-9">

						<label class="cbr-inline">
							<input type="checkbox" checked class="cbr cbr-info">
							Daily news about our portal
						</label>

						<br />

						<label class="cbr-inline">
							<input type="checkbox" checked class="cbr cbr-danger">
							Reported issues and bug fixes
						</label>

						<br />

						<label class="cbr-inline">
							<input type="checkbox" checked class="cbr cbr-success">
							Latest offers and discounts
						</label>

					</div>
				</div>
			</div>

		</div>
	</div>
</form>