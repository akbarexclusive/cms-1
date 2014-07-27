<?php
namespace Craft;

craft()->requireEdition(Craft::Pro);

/**
 * User permission functions.
 *
 * @package craft.app.validators
 */
class UserPermissionsVariable
{
	/**
	 * Returns all of the known permissions, sorted by category.
	 *
	 * @return array
	 */
	public function getAllPermissions()
	{
		return craft()->userPermissions->getAllPermissions();
	}

	/**
	 * Returns all of the group permissions a given user has.
	 *
	 * @param int $userId
	 * @return array
	 */
	public function getGroupPermissionsByUserId($userId)
	{
		return craft()->userPermissions->getGroupPermissionsByUserId($userId);
	}
}
