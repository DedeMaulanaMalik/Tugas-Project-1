<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 <!-- Main content -->
    <section class="content">

    <?php
class persegipanjang{
    public $panjang;
    public $lebar;

    public function luasp(){
        $luas=$this->panjang*$this->lebar;
        return "Luas :".$luas;
    }
    public function kelilingp(){
        $keliling=2*($this->panjang+$this->lebar);
        return "Keliling :".$keliling;
    }

    public function setLebar($lebar){
        return $this->lebar=$lebar;
    }
    public function setPanjang($panjang){
        return $this->panjang=$panjang;
    }
}
$LuasPersegi=new persegipanjang();
echo "Panjang :".$LuasPersegi->setPanjang(21);
echo "<br>";
echo "Lebar :".$LuasPersegi->setLebar(7);
echo "<br>";
echo $LuasPersegi->luasp();
echo "<br>";
echo $LuasPersegi->kelilingp();

?>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>