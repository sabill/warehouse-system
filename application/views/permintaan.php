
<style>
        .form-style-5{
            max-width: 500px;
            padding: 10px 20px;
            background: #f4f7f8;
            margin: 10px auto;
            padding: 20px;
            background: #f4f7f8;
            border-radius: 8px;
            font-family: Georgia, "Times New Roman", Times, serif;
        }
        .form-style-5 fieldset{
            border: none;
        }
        .form-style-5 legend {
            font-size: 1.4em;
            margin-bottom: 10px;
        }
        .form-style-5 label {
            display: block;
            margin-bottom: 8px;
        }
        .form-style-5 input[type="text"],
        .form-style-5 input[type="date"],
        .form-style-5 input[type="datetime"],
        .form-style-5 input[type="email"],
        .form-style-5 input[type="number"],
        .form-style-5 input[type="search"],
        .form-style-5 input[type="time"],
        .form-style-5 input[type="url"],
        .form-style-5 textarea,
        .form-style-5 select {
            font-family: Georgia, "Times New Roman", Times, serif;
            background: rgba(255,255,255,.1);
            border: none;
            border-radius: 4px;
            font-size: 15px;
            margin: 0;
            outline: 0;
            padding: 10px;
            width: 100%;
            box-sizing: border-box; 
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box; 
            background-color: #e8eeef;
            color:#8a97a0;
            -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            margin-bottom: 30px;
        }
        .form-style-5 input[type="text"]:focus,
        .form-style-5 input[type="date"]:focus,
        .form-style-5 input[type="datetime"]:focus,
        .form-style-5 input[type="email"]:focus,
        .form-style-5 input[type="number"]:focus,
        .form-style-5 input[type="search"]:focus,
        .form-style-5 input[type="time"]:focus,
        .form-style-5 input[type="url"]:focus,
        .form-style-5 textarea:focus,
        .form-style-5 select:focus{
            background: #D85656;
        }
        .form-style-5 select{
            -webkit-appearance: menulist-button;
            height:35px;
        }
        .form-style-5 .number {
            background: #D85656;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255,255,255,0.2);
            border-radius: 15px 15px 15px 0px;
        }

        .form-style-5 input[type="submit"],
        .form-style-5 input[type="button"]
        {
            position: relative;
            display: block;
            padding: 19px 39px 18px 39px;
            color: #FFF;
            margin: 0 auto;
            background: #D85656;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            width: 100%;
            border: 1px solid #D85656;
            border-width: 1px 1px 3px;
            margin-bottom: 10px;
        }
        .form-style-5 input[type="submit"]:hover,
        .form-style-5 input[type="button"]:hover
        {
            background: #D85656;
        }
</style>

        
        <div class="form-style-5">
            <form method="post" action="add" enctype="multipart/form-data" > 
                <fieldset>
                    <legend><span class="img"><img src="assets/images/icons/interview.png" alt="request" style="width:9%"></span> Permintaan</legend>
                    <div style="background-color: #B38080 color: #FFFFFF">
                    <h4>FORMULIR PERMINTAAN PRODUKSI</h3>
                    </div>

                    <label for="job">Item:</label>
                     <select id="job" name="field4"> <!-- variabel name ini harus sesuai dengan model postnya, contoh = name adalah item maka di model yang di post juga "item" dan begitu juga pada rulesnya --> -->
                        <optgroup label="Item A">
                            <option value="#">Item I</option>
                            <option value="#">Item II</option>
                        </optgroup>
                        <optgroup label="Item B">
                            <option value="#">Item I</option>
                            <option value="#">Item II</option>
                        </optgroup>
                    </select>
                    <label for="job">Kuantitas:</label>
                    <input type="text" name="field1" placeholder="Fill Quantity">
                    <label for="job">Lokasi:</label>
                    <label class="container">
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                        LOBP 1
                    </label>
                    <label class="container">
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                        LOBP 2
                    </label>
                    <label class="container">
                        <span class="checkmark">
                            <input type="radio" name="radio">
                            <input type="text">
                        </span>
                        
                    </label>
                        
                </fieldset>
                <input type="submit" value="Request" />
            </form>
        </div>
