<div class="row" id="ninthrow">
    <div class="col-lg-6 col-sm-offset-1">
        <form id="form-contact" class="form-horizontal" role="form" method="post" action="<?php echo BASE_URL; ?>postcontact" target="prc_box" autocomplete="off">
            <div class="form-group">
                <h3>Contact</h3>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-left">Lokasi acara Anda</label>
                <div class="col-sm-5">
                    <?php echo form_dropdown('lokasi', $getCity, '', "class='form-control input-sm' id='lokasi' "); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-left">Berapa hari acara Anda</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control input-sm numeric" maxlength="1" id="jumlah_hari" name="jumlah_hari" style="width: 30%" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label">Tanggal acara Anda</label>
                <div class="col-sm-5">
                    <div class="input-group datetimepicker">
                        <input name="tanggal_acara" id="tanggal_acara" type="text" class="form-control input-sm" value=""/>
                        <div class="input-group-addon input-sm"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-left">Jenis acara Anda</label>
                <div class="col-sm-5">
                    <select name="jenis_acara" class="form-control input-sm" id="jenis_acara">
                        <option value="" selected="selected">- Select Jenis Acara -</option>
                        <option value="Pernikahan">Pernikahan</option>
                        <option value="Seminar/Simposium">Seminar/Simposium</option>
                        <option value="Rapat">Rapat</option>
                        <option value="Ulang Tahun">Ulang Tahun</option>
                        <option value="Pelatihan">Pelatihan</option>
                        <option value="Peluncuran Produk/Jasa">Peluncuran Produk/Jasa</option>
                        <option value="Acara Lain">Acara Lain</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-right">Jumlah rencana undangan yang akan disebarkan</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control input-sm numeric" maxlength="4" id="jumlah_undangan" name="jumlah_undangan" style="width: 50%" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-left">Jenis undangan yang akan disebarkan</label>
                <div class="col-sm-5">
                    <select name="jenis_undangan" class="form-control input-sm" id="jenis_undangan">
                        <option value="" selected="selected">- Select Jenis Undangan -</option>
                        <option value="Kartu">Kartu</option>
                        <option value="Cetak">Cetak</option>
                        <option value="Kartu & Cetak">Kartu & Cetak</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-left">Jumlah personil tamu</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control input-sm numeric" id="jumlah_personil_tamu" name="jumlah_personil_tamu" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-left">Jumlah personil regristrasi baru</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control input-sm numeric" id="jumlah_personil_regis_baru" name="jumlah_personil_regis_baru" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-left">Alamat e-mail untuk simulasi Anda</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control input-sm" id="email" name="email" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-left">Nomer HP yang dapat dihubungi</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control input-sm" id="telp" name="telp" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-left">Note</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control input-sm" id="note" name="note">
                </div>
            </div>

            <div class="form-group" style="float:left;width: 100%">
                <label class="col-sm-7 control-label form-left">Captcha</label>
                <div class="col-sm-3">
                    <?php
                    echo $capimg;
                    ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-7 control-label form-left">&nbsp;</label>
                <div class="col-sm-5">
                    <input type="text"  class="form-control input-sm" id="reg_atsp" name="reg_atsp" placeholder="Anti Spam (Input the text you're seeing below this box)" required>
                </div>
            </div>

            <div class="form-group">
                <input type="hidden" id="reg_atsp_wrd" name="reg_atsp_wrd" value="<?php echo sha1($capwrd); ?>" required>
                <button id="contactsubmit" class="btn btn-lg btn-primary pull-right" data-loading-text="Sending...">Send</button>
            </div>

        </form>

    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('.datetimepicker').datetimepicker({
            format: "D MMMM YYYY"
        });
    });
    $(".numeric").keypress(function (e) {
        if (String.fromCharCode(e.keyCode).match(/[^0-9]/g))
            return false;
    });
</script>
