<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./img/logo.jpg">
  <title>Tumor on target</title>
  <link rel="stylesheet" href="{{asset('assets/app.css')}}">
</head>

<body>
  <div class="page-wrapper bg-gra-02 p-t-10 p-b-10 font-poppins">
    <div class="wrapper wrapper--w960">
      <div class="card card-4">
        <div class="card-body">
          <h2 class="title"> <img class="logo" src="/assets/img/logo.jpg" alt=""> Tumor On Target</h2>
        <form method="POST" action="#">
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">F.I.SH</label>
                  <input class="input--style-4" type="text" name="first_name">
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Telefon raqami</label>
                  <input  type="text" class="input--style-4" name="phone"  >
                </div>
              </div>
            </div>
            <div class="row row-space">
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Tug'ilgan sanasi</label>
                  <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="date" name="birthday" placeholder="oy/kun/yil">
                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="input-group">
                  <label class="label">Jinsi</label>
                  <div class="p-t-10">
                    <label class="radio-container m-r-45">Erkak
                      <input type="radio" checked="checked" name="gender">
                      <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Ayol
                      <input type="radio" name="gender">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>


            <div class="input-group">
            
              <div class="select-wrapper">
                <div class="alone_select">
                  <label class="label">Yashash Manzili: <b>Viloyat</b></label>
                  <div class="rs-select2 js-select-simple select--no-search">
                    <select name="subject">
                      <option disabled="disabled" selected="selected">Viloyatni tanlang</option>
                      <option>Andijon</option>
                      <option>Namangan</option>
                      <option>Farg'ona</option>
                    </select>
                    <div class="select-dropdown"></div>
                  </div>
                 </div>
  
             <div class="alone_select">
              <label class="label">Yashash Manzili: <b>Tuman yoki Shahar</b></label>
              <div class="rs-select2 js-select-simple select--no-search">
                <select name="subject">
                  <option disabled="disabled" selected="selected">Tuman yoshi shaharni tanlang</option>
                  <option>Namangan shahri</option>
                  <option>Chust</option>
                  <option>Pop</option>
                  <option>To'raqo'rg'on</option>
                  <option>Uychi</option>
                </select>
                <div class="select-dropdown"></div>
              </div>
             </div>
              </div>


            </div>
            <div class="input-group">
            
              <div class="select-wrapper">
                <div class="alone_select">
                  <label class="label">Tashhis : <b> Tekshirilayotgan kasallik</b></label>
                  <div class="rs-select2 js-select-simple select--no-search">
                    <select name="subject">
                      <option disabled="disabled" selected="selected">Kassalik turini tanlang</option>
                      <option>TORCH</option>
                      <option>Covid-19</option>
                      <option>Omikron</option>
                      <option>Grip</option>
                      <option>Shamollash</option>
                    </select>
                    <div class="select-dropdown"></div>
                  </div>
                 </div>
  
             <div class="alone_select">
              <div class="input-group">
                <label class="label">Kassalik turini yozing</label>
                <input class="input--style-4" type="text" name="text">
              </div>
             </div>
              </div>


            </div>


            <div class="row row-space">
              <div class="col-4">
                <div class="input-group">
                  <label class="label">ПЦР натижаси</label>
                  <input class="input--style-4" type="email" name="email">
                </div>
              </div>
              <div class="col-4">
                <div class="input-group">
                  <label class="label">АЛТ
                  </label>
                  <input class="input--style-4" type="text" name="phone">
                </div>
              </div>
              <div class="col-4">
                <div class="input-group">
                  <label class="label">АСТ

                  </label>
                  <input class="input--style-4" type="text" name="phone">
                </div>
              </div>
              <div class="col-4">
                <div class="input-group">
                  <label class="label">Биллирубин
                  </label>
                  <input class="input--style-4" type="text" name="phone">
                </div>
              </div>
            </div>
            <div class="row row-space">
              <div class="col-4">
                <div class="input-group">
                  <label class="label">Ишқорий фосфотаза
                  </label>
                  <input class="input--style-4" type="email" name="email">
                </div>
              </div>
              <div class="col-4">
                <div class="input-group">
                  <label class="label">тимол сурмаси

                  </label>
                  <input class="input--style-4" type="text" name="phone">
                </div>
              </div>
              <div class="col-4">
                <div class="input-group">
                  <label class="label">IgG


                  </label>
                  <input class="input--style-4" type="text" name="phone">
                </div>
              </div>
              <div class="col-4">
                <div class="input-group">
                  <label class="label">IgM

                  </label>
                  <input class="input--style-4" type="text" name="phone">
                </div>
              </div>
            </div>


            <!-- <div class="input-group">
            
              <div class="select-wrapper">
                <div class="alone_select">
                  <label class="label">Subject</label>
                  <div class="rs-select2 js-select-simple select--no-search">
                    <select name="subject">
                      <option disabled="disabled" selected="selected">Choose option</option>
                      <option>Subject 1</option>
                      <option>Subject 2</option>
                      <option>Subject 3</option>
                    </select>
                    <div class="select-dropdown"></div>
                  </div>
                 </div>
  
             <div class="alone_select">
              <label class="label">Subject</label>
              <div class="rs-select2 js-select-simple select--no-search">
                <select name="subject">
                  <option disabled="disabled" selected="selected">Choose option</option>
                  <option>Subject 1</option>
                  <option>Subject 2</option>
                  <option>Subject 3</option>
                </select>
                <div class="select-dropdown"></div>
              </div>
             </div>
              </div>


            </div> -->


            <div class="p-t-15">
              <button class="btn btn--radius-2 btn--blue" type="submit">Ro'yhatga olish</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('assets/app.js')}}"></script>

</body>

</html>