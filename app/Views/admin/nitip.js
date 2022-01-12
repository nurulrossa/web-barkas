/*$('#btn-add').on('click', function(){
                var nama = $('input[name="nama"]').val();
                var jabatan = $('input[name="jabatan"]').val();
                var komisi = $('select[name="komisi"').val();
                var fraksi = $('select[name="fraksi"').val();
                var facebook = $('input[name="facebook"]').val();
                var instagram = $('input[name="instagram"]').val();
                var twitter = $('input[name="twitter"]').val();
                var foto = $('input[name="foto"]').val();
                console.log(nama);

                $.ajax({
                    url: '<?php echo base_url('anggotaController/tambahAnggota') ?>',
                    type: 'POST',
                    data: {
                        namaw : nama,
                        jabatan : jabatan,
                        komisi : komisi,
                        fraksi : fraksi,
                        facebook : facebook,
                        instagram : instagram,
                        twitter : twitter,
                        foto : foto,
                    },
                    dataType: 'json',
                    success: function(response){
                        if (response.status == 'error') {
                            //console.log(response.data);
                            console.log(response);

                            if (response.data.nama) {
                                $('input[name="nama"]').addClass('is-invalid');
                                $('#invalid-nama').html(response.data.nama)
                            }else{
                                $('input[name="nama"]').removeClass('is-invalid');
                                $('#invalid-nama').html('');
                            }

                            if (response.data.jabatan) {
                                $('input[name="jabatan"]').addClass('is-invalid');
                                $('#invalid-jabatan').html(response.data.jabatan)
                            }else{
                                $('input[name="jabatan"]').removeClass('is-invalid');
                                $('#invalid-jabatan').html('');
                            }

                            if (response.data.komisi) {
                                $('select[name="komisi"').addClass('is-invalid');
                                $('#invalid-komisi').html(response.data.komisi)
                            }else{
                                $('select[name="komisi"]').removeClass('is-invalid');
                                $('#invalid-komisi').html('');
                            }

                            if (response.data.fraksi) {
                                $('select[name="fraksi"').addClass('is-invalid');
                                $('#invalid-fraksi').html(response.data.fraksi)
                            }else{
                                $('select[name="fraksi"]').removeClass('is-invalid');
                                $('#invalid-fraksi').html('');
                            }

                            if (response.data.foto) {
                                $('input[name="foto"').addClass('is-invalid');
                                $('#invalid-foto').html(response.data.foto)
                            }else{
                                $('input[name="foto"]').removeClass('is-invalid');
                                $('#invalid-foto').html('');
                            }
                        }else{
                            $('input[name="nama"]').val('');
                            $('input[name="nama"]').removeClass('is-invalid');
                            $('#invalid-nama').html('');

                            $('input[name="jabatan"]').val('');
                            $('input[name="jabatan"]').removeClass('is-invalid');
                            $('#invalid-jabatan').html('');

                            $('select[name="komisi"]').val('');
                            $('select[name="komisi"]').removeClass('is-invalid');
                            $('#invalid-komisi').html('');

                            $('select[name="fraksi"]').val('');
                            $('select[name="fraksi"]').removeClass('is-invalid');
                            $('#invalid-fraksi').html('');
                            
                            $('input[name="facebook"]').val('');
                            $('input[name="facebook"]').removeClass('is-invalid');
                            $('#invalid-facebook').html('');

                            $('input[name="instagram"]').val('');
                            $('input[name="instagram"]').removeClass('is-invalid');
                            $('#invalid-instagram').html('');

                            $('input[name="twitter"]').val('');
                            $('input[name="twitter"]').removeClass('is-invalid');
                            $('#invalid-twitter').html('');

                            $('#tambahModal').modal('hide');
                            
                            Swal.fire(
                                'Success',
                                'Berhasil Menambah Data',
                                'success'
                            )

                            tampil_data();
                        }
                    }
                })
            })*/