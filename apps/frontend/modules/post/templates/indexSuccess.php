<h1>Posts List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Post</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($posts as $post): ?>
    <tr>
      <td><a href="<?php echo url_for('post/show?id='.$post->getId()) ?>"><?php echo $post->getId() ?></a></td>
      <td><?php echo $post->getTitle() ?></td>
      <td><?php echo $post->getPost() ?></td>
      <td><?php echo $post->getCreatedAt() ?></td>
      <td><?php echo $post->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('post/new') ?>">New</a>
