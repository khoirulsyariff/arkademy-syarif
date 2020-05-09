<div class="container mt-5">
    <!-- flash massage -->
    <?= $this->session->flashdata('massage'); ?>

    <table class="table table-borderless shadow">
        <thead class="">
            <tr>
                <th scope="col" class="text-white">No</th>
                <th scope="col" class="text-white">Cashier</th>
                <th scope="col" class="text-white">Product</th>
                <th scope="col" class="text-white">Category</th>
                <th scope="col" class="text-white">Price</th>
                <th scope="col" class="text-white">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            <?php foreach($datas as $data): ?>
            <tr>
                <td ><?= $i; ?></td>
                <td><?= $data['Cashier']; ?></td>
                <td><?= $data['Product'] ?></td>
                <td><?= $data['Category'] ?></td>
                <td><?= "Rp " . number_format($data['Price'],2,',','.'); ?></td>
                <td>
                        <a href="<?= base_url('arkademy/edit_data/').$data['ID']; ?>" 
                        class="text-success"><input type="image" src="<?php echo base_url('assets/img/edit.png'); ?>" width="20px"
                                height="20px" /></a>
                        <a href="<?= base_url('arkademy/delete_data/').$data['ID']; ?>" 
                        class="text-success"><input type="image" src="<?php echo base_url('assets/img/hapus.png'); ?>" width="20px"
                                height="20px" /></a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Modal -->
    <div
        class="modal fade"
        id="addSubMenuModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('Arkademy/add_product'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <select class="custom-select" id="inputGroupSelect01" name="cashier">
                                <option selected="selected">Cashier</option>
                                <option value="1">Pevita Pierce</option>
                                <option value="2">Raisa Adnriani</option>
                                <option value="3">Khoirul Syarif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                id="product"
                                name="product"
                                placeholder="enter new product">
                        </div>
                        <div class="form-group">
                            <select class="custom-select" id="inputGroupSelect01" name="category">
                                <option selected="selected">Category</option>
                                <option value="1">Food</option>
                                <option value="2">Drink</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                id="price"
                                name="price"
                                placeholder="enter price">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of modal -->

    <!-- Modal -->
    <div
        class="modal fade"
        id="addSubMenuModal2"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('arkademy/edit_data/').$data['ID']; ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <select class="custom-select" id="inputGroupSelect01" name="cashier">
                                <option selected="selected">Cashier</option>
                                <option value="1">Pevita Pierce</option>
                                <option value="2">Raisa Adnriani</option>
                                <option value="3">Muhammad Salbiyath</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                id="product"
                                name="product"
                                placeholder="enter new product">
                        </div>
                        <div class="form-group">
                            <select class="custom-select" id="inputGroupSelect01" name="category">
                                <option selected="selected">Category</option>
                                <option value="1">Food</option>
                                <option value="2">Drink</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                id="price"
                                name="price"
                                placeholder="enter price">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of modal -->
</div>