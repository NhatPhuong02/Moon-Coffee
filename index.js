function add_element() {
    var html = '<tr>  <td> </td> <td class = "w-25" > <input type = "text" class = ""> < /input> </td> <td class = "text-center w-25" > <input type = "text" class = "" > </input> </td > <td class = "text-center"> <input type = "text" class = "" > </input> < /td > </tr > '        
    document.getElementById('table').insertAdjacentHTML('beforeend', html);

}