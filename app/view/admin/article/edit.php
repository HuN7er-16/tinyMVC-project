<?php $this->include("admin.layouts.header") ?>

<form action="<?php $this->url('article/update/' . $article['id']) ?>" method="post">
    <section class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= $article['title'] ?>">
    </section>
    <section class="form-group">
        <label for="cat_id">Category</label>
        <select class="form-control" id="cat_id">
            <?php foreach($categories as $category){ ?>
            <option value="<?= $category['id'] ?>" <?php if($article['cat_id'] == $category['id']) echo 'selected' ?>><?= $category['name'] ?></option>
            <?php } ?>
        </select>
    </section>
    <section class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" id="body" rows="5" value="<?= $article['body'] ?>"></textarea>
    </section>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php $this->include("admin.layouts.footer") ?>