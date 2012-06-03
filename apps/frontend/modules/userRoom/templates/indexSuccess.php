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
    <tfoot>
        <tr>
            <td>
        <?php if($edit) echo link_to('edit profile','@profile_edit?id='.$user->getId())?>
            </td>
        </tr>
    </tfoot>
</table>    