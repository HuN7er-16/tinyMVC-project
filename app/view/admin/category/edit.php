<?php $this->include("admin.layouts.header") ?>

                <form>
                    <section class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="name ...">
                    </section>
                    <section class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="description ...">
                    </section>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <?php $this->include("admin.layouts.footer") ?>