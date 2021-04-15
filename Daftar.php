<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style type="text/css">
        .buat{
            font-size: 20px;
            border: none;
            background: #FFDD02 ;
            margin-top: 23px;
            padding-right: 25px;
            padding-left: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 10px;
            color: #fff;
        }
        .nama{
            width: 48%; 
            border-radius: 20px;
            border: none;
            padding-left: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            box-shadow: 0px 2px 5px #333;
            outline: none;
        }
        .nama1{
            width: 48%;
            border-radius: 20px;
            border: none;
            padding-left: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            box-shadow: 0px 2px 5px #333;
            outline: none;
            margin-left: 50px;
        }

        .hubungi1{
            border: none;
            background: none;
            font-size: 20px;
            padding-top: 23px;
            margin-left: -25px;
        }   

        .login{
            border: none;
            background: none;
            font-size: 22px;
            padding-top: 5px;
        }  

        .email{
            width: 100%; 
            border-radius: 20px;
            border: none;
            padding-left: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            box-shadow: 0px 2px 5px #333;
            outline: none;
        } 
        .tanggal{
            border-radius: 20px;
            border: none;
            padding-left: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            box-shadow: 0px 2px 5px #333;
            outline: none;
            width: 30%;
            float: left;
        }
        .bulan{
            border-radius: 20px;
            border: none;
            padding-left: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            box-shadow: 0px 2px 5px #333;
            outline: none;
            width: 50%;
        }
        .tahun{
            border-radius: 20px;
            border: none;
            padding-left: 20px;
            padding-top: 8px;
            padding-bottom: 8px;
            box-shadow: 0px 2px 5px #333;
            outline: none;
            width: 30%;
            float: right;
            margin-top: -40px;
        }
        .l{
            background: #fff;
            float: left;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            border-radius: 20px;
            box-shadow: 0px 2px 5px #333;
        }
        .p{
            background: #fff;
            float: right;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            border-radius: 20px;
            box-shadow: 0px 2px 5px #333;
        }
        .masuk{
            border: none;
            background: #B12EC9;
            color: #fff;
            padding-left: 50px;
            padding-right:50px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 20px;
            border-radius: 50px;
            margin-top: 15px;
        }

        .beranda1{
            border: none;
            background: none;
            font-size: 20px;
            padding-top: 23px;
            margin-left: -55px;
        }
        </style>
    <body>
        <div class="container-fluid" style="font-family: sans-serif;">
            <div class="row">
                <div class="navbar" style="width: 100%;margin-top: -25px;" >
                    <div class="col-1">
                            <div>
                                <img src="/img/logo.png" width="110px" style="padding-left: 10px;margin-top: 20px;">
                            </div>
                    </div>
                    <div class="col-2" style="padding-top: 20px;">
                                <b style="font-size: 18px;padding-left: 10px;">CV DOSEN</b><h5 style="font-weight: 700px;padding-left: 9px;">UNTAN</h5>                        
                    </div>
                    <div class="col-1">
                        <div>
                            <button class="beranda1" style="outline: none;">Beranda</button>
                        </div>
                    </div>
                    <div class="col-3">
                        <div>
                            <button class="hubungi1" style="outline: none;">Hubungi Kami</button>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-1">
                        <div>
                            <button class="login" style="outline: none;">
                                <img src="">
                                <p>Login</p>
                            </button>
                        </div>
                    </div>
                    <div class="col-2">
                        <button class="buat" style="outline: none;">Buat CV</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <form style="width: 100%;background: #FFDD02;height: 720px;">
                    <div style="margin-top: 30px;padding-left: 40px;" class="form-group">    
                        <div class="col-2"></div>
                        <div class="col-3">
                            <h2>Daftar</h2>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-5" style="float: right;margin-top: 60px;">
                            <img src="/img/back.png" style="width: 100%;">
                        </div>
                    </div>

                    <div class="form-group" style="padding-left: 40px;">
                        <div class="col-5" style="float: left;">
                            <input type="text" placeholder="Nama Depan" class="nama"> 
                        </div>
                        <div class="col-2"></div>   
                        <div class="col-5" style="float: right;margin-top: -40px;margin-bottom: 20px;">
                            <input type="text" placeholder="Nama Belakang" class="nama1" > 
                        </div>
                    </div>

                    <div class="form-group" style="padding-left: 40px;padding-top: 10px;">
                        <div class="col-5">
                            <input type="text" placeholder="Email" class="email"> 
                        </div>
                        <div class="col-7"></div>
                    </div>

                    <div class="form-group" style="padding-left: 40px;">
                        <div class="col-5">
                            <input type="text" placeholder="Nomor Telepon/HP" class="email"> 
                        </div>
                        <div class="col-7"></div>
                    </div>

                    <div class="form-group" style="padding-left: 40px;">
                        <div class="col-5">
                            <input type="text" placeholder="Kata Sandi Baru" class="email"> 
                        </div>
                        <div class="col-7"></div>
                    </div>

                     <div style="padding-left: 40px;padding-top: 20px;" class="form-group">    
                        <div class="col-2"></div>
                        <div class="col-3">
                            <h5>Tanggal Lahir</h5>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-5" style="float: right;margin-top: -55px;"></div>
                    </div>

                    <div class="form-group" style="padding-left: 40px;">
                        <div class="col-3">
                            <input list="number" class="tanggal" placholder="0">
                            <datalist id="number"> 
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </datalist>
                        </div>

                        <div class="col-6" style="margin-left: 100px;">
                            <input list="number" class="bulan" placholder="0" >
                            <datalist id="number"> 
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </datalist>
                        </div>

                        <div class="col-3" style="margin-left: 220px;">
                            <input list="number" class="tahun" placholder="0">
                            <datalist id="number"> 
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </datalist>
                        </div>
                    </div>

                    <div style="padding-left: 40px;padding-top: 10px;" class="form-group">    
                        <div class="col-2"></div>
                        <div class="col-3">
                            <h5>Jenis Kelamin</h5>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-5" style="float: right;margin-top: -55px;"></div>
                    </div>

                    <div class="form-group" style="padding-left: 40px;">
                        <div class="col-3">
                            <p class="l" style="width: 250px;">Laki-laki</p><input type="checkbox" name="" style="margin-left: -25px;margin-top: 15px;">
                        </div>
                        <div class="col-2"></div>
                        <div class="col-3" style="margin-left: 220px;">
                            <p class="p" style="width: 250px;margin-top: -35px;">Perempuan<input type="checkbox" name="" style="margin-left: 130px;"></p>  
                        </div>
                        <div class="col-4"></div>
                    </div>

                    <div style="padding-left: 40px;padding-top: 10px;" class="form-group">    
                        <div class="col-2"></div>
                        <div class="col-3">
                            <h5>Status</h5>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-5" style="float: right;margin-top: -55px;"></div>
                    </div>

                    <div class="form-group" style="padding-left: 40px;">
                        <div class="col-3">
                           <p class="l" style="width: 250px;">Dosen</p><input type="checkbox" name="" style="margin-left: -25px;margin-top: 15px;">
                        </div>
                        <div class="col-2"></div>
                        <div class="col-3" style="margin-left: 220px;">
                            <p class="p" style="width: 250px;margin-top: -35px;">Mahasiswa<input type="checkbox" name="" style="margin-left: 130px;"></p> 
                        </div>
                    </div>                        

                    <div class="form-group" style="padding-left: 40px;padding-top: 10px;">
                        <div class="col-5">
                            <center>
                                <button class="masuk" style="outline: none;">Masuk</button>
                            </center>
                        </div>
                        <div class="col-7"></div>
                    </div>
                </form>  

            </div>
        </div>
    </body>
</head>
</html>