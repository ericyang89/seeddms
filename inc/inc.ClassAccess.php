<?php
/**
 * Implementation of user and group access object
 *
 * @category   DMS
 * @package    LetoDMS
 * @license    GPL 2
 * @version    @version@
 * @author     Uwe Steinmann <uwe@steinmann.cx>
 * @copyright  Copyright (C) 2002-2005 Markus Westphal, 2006-2008 Malcolm Cowe,
 *             2010 Uwe Steinmann
 * @version    Release: @package_version@
 */

/**
 * Class to represent a user access right.
 * This class cannot be used to modify access rights.
 *
 * @category   DMS
 * @package    LetoDMS
 * @author     Markus Westphal, Malcolm Cowe, Uwe Steinmann <uwe@steinmann.cx>
 * @copyright  Copyright (C) 2002-2005 Markus Westphal, 2006-2008 Malcolm Cowe,
 *             2010 Uwe Steinmann
 * @version    Release: @package_version@
 */
class LetoDMS_UserAccess { /* {{{ */
	var $_user;
	var $_mode;

	function LetoDMS_UserAccess($user, $mode) {
		$this->_user = $user;
		$this->_mode = $mode;
	}

	function getUserID() { return $this->_user->getID(); }

	function getMode() { return $this->_mode; }

	function getUser() {
		return $this->_user;
	}
} /* }}} */


/**
 * Class to represent a group access right.
 * This class cannot be used to modify access rights.
 *
 * @category   DMS
 * @package    LetoDMS
 * @author     Markus Westphal, Malcolm Cowe, Uwe Steinmann <uwe@steinmann.cx>
 * @copyright  Copyright (C) 2002-2005 Markus Westphal, 2006-2008 Malcolm Cowe, 2010 Uwe Steinmann
 * @version    Release: @package_version@
 */
class LetoDMS_GroupAccess { /* {{{ */
	var $_group;
	var $_mode;

	function LetoDMS_GroupAccess($group, $mode) {
		$this->_group = $group;
		$this->_mode = $mode;
	}

	function getGroupID() { return $this->_group->getID(); }

	function getMode() { return $this->_mode; }

	function getGroup() {
		return $this->_group;
	}
} /* }}} */
?>
