<?= $this->include('templates/header') ?>

<h1>Tasks for Today</h1>

<p>
    Today is <?= esc(date('F d, Y')) ?>.
    The following tasks are scheduled for today.
</p>

<?php if (!empty($tasks)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['id']) ?></td>
                    <td><?= esc($task['title']) ?></td>

                    <td class="<?= esc($task['status']) ?>">
                        <?= esc(ucfirst($task['status'])) ?>
                    </td>

                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No tasks are scheduled for today.</p>
<?php endif; ?>

<?= $this->include('templates/footer') ?>