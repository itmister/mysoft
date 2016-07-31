<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:49:"../public/app_admin/tpls/layout/sidebar-menu.html";i:1466350462;}*/ ?>
<script type="text/ng-template" id="menu-item-link-tpl">
	<i ng-if="item.icon" class="{{item.icon}}"></i>
	<span class="title">{{item.title}}</span>			
	<span ng-if="item.label" class="label label-{{item.label.classname}} pull-right" ng-class="{'hidden-collapsed': item.label.collapsedHide}">{{item.label.text}}</span>
</script>

<script type="text/ng-template" id="menu-items-tpl">
	<li ng-repeat="item in menuItems" ng-class="{'opened': item.isOpen, 'active': item.isActive, 'has-sub': item.menuItems.length}">
		<a href="#{{item.link}}" ng-include="'menu-item-link-tpl'"></a>
		
		<ul ng-if="item.menuItems.length" ng-init="subItems = item.menuItems" ng-include="'menu-items-recursive-tpl'"></ul>
	</li>
</script>

<script type="text/ng-template" id="menu-items-recursive-tpl">
	<li ng-repeat="item in subItems" ng-class="{'opened expanded': item.isOpen, 'active': item.isActive, 'has-sub': item.menuItems.length}">
		<a href="#{{item.link}}" ng-include="'menu-item-link-tpl'"></a>
		<ul ng-if="item.menuItems.length" ng-init="subItems = item.menuItems" ng-include="'menu-items-recursive-tpl'"></ul>
	</li>
</script>

	
<ul id="main-menu" class="main-menu" ng-class="{'mobile-is-visible': layoutOptions.sidebar.isMenuOpenMobile}" ng-include="'menu-items-tpl'">
</ul>