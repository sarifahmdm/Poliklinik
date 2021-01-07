


                              <?php

                                    include "diagnosa.php";
                                    $id_diagnosa = $_GET['id_diagnosa'];
                                    $jenis_poli = $_GET['jenis_poli'];
                                    include "build/menu_diagnosa.php";
                                    include "pemeriksaan_fisik.php";
                              ?>

                            </div>
                          </div>
                            </div>
                          </div>
                        </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
  include 'build/modal_jenis_asuransi.php';
  include  'build/footer.php';
  ?>
