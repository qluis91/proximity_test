 <h2>Proximity prueba</h2>
 
  <div>
    
    <div>
        <div class="input-group">
            <input type="text" name="search_word" id="search_word" class="form-control" value="" placeholder="Escribe.." />
            <span id="error_empty" class="error_input">El campo no puede ir vacio</span>
            <span class="input-group-addon" ><button id=button_search" onclick="buscar()">Buscar</button></span>
        </div>
    </div>
  </div>
 
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>City</th>
        <th>State</th>
      </tr>
    </thead>
    <tbody id="myTable">



    </tbody>
    
  </table>
<div class="loader"></div>