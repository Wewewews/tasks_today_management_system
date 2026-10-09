<?= $this->include('templates/header') ?>

<h1>User Profile</h1>

<?php if (!empty($user)): ?>
    <table>
        <tr>
            <th>ID</th>
            <td><?= esc($user['id']) ?></td>
        </tr>

        <tr>
            <th>Username</th>
            <td><?= esc($user['username']) ?></td>
        </tr>

        <tr>
            <th>Full Name</th>
            <td><?= esc($user['full_name']) ?></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><?= esc($user['email']) ?></td>
        </tr>

        <tr>
            <th>Account Created</th>
            <td><?= esc($user['created_at']) ?></td>
        </tr>
    </table>
<?php else: ?>
    <p>No user record was found.</p>
<?php endif; ?>

<?= $this->include('templates/footer') ?>