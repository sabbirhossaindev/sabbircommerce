<?php session_start(); ?>

<?php include 'header-shop-page.php'; ?>

<div class="container">
    <table class="table table-striped table-hover rounded table-responsive-sm table-responsive-lg table-responsive-md">
        <a href="emptycart.php" class="btn btn-sm btn-danger mt-2">Empty Cart</a>
        <thead>
            <tr class="text-center">
                <th>S.no</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>


        <tbody>
            <?php
                if (isset($_SESSION['cart'])) :
                $i = 1;
                foreach ($_SESSION['cart'] as $cart) :
            ?>
            <tr class="text-center">
                <td><?php echo $i; ?> # </td>
                <td> Product <?= $cart['pro_id']; ?></td>
                <td>
                    <form action="updatecard.php" method="post">
                        <input type="number" value="<?= $cart['qty']; ?>" name="qty" min="1">
                        <input type="hidden" name="upid" value="<?= $cart['pro_id']; ?>">
                </td>
                <td>
                    <input type="submit" name="update" value="Update" class="btn btn-sm btn-warning">
                </td>
                <td><a class="btn btn-sm btn-danger" href="removecartitem.php?id=<?= $cart['pro_id']; ?>"
                        onclick=" return confirm('Are you sure you want to delete.');">Remove</a>
                </td>
                </form>
            </tr>
            <?php
          $i++;
        endforeach;
      endif;
      ?>
        </tbody>
    </table>
</div>
<?php include 'footer-shop-page.php'; ?>