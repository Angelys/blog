<table>
    <tbody>
        <th>Your Profile</th>
        <tr>
            <td>First Name</td>
            <td><?php echo $user->getFirstName()?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $user->getLastName()?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><?php echo $user->getUsername()?></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><?php echo $user->getEmailAddress()?></td>
        </tr>
        <tr>
            <td>Created</td>
            <td><?php echo $user->getCreatedAt()?></td>
        </tr>
    </tbody>
    <?php if($edit):?>
    <tfoot>
        <tr>
            <td>
                 <?php echo link_to('edit profile','@profile_edit?id='.$user->getId())?>
            </td>
            <td>
                <?php echo link_to('change password','@profile_change_password?id='.$user->getId())?>
            </td>
        </tr>
    </tfoot>
    <?php endIf;?>
</table>    