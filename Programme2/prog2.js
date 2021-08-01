document.write( "<center><table> <tr> <th>Number</th> <th>Square</th> <th>Cube</th> </tr>" ) 
for(var n=0; n<=10; n++) 
{ 
document.write( "<tr><td>" + n + "</td><td>" + n*n + "</td><td>" + n*n*n + "</td></tr>" ) 
} 
document.write( "</table></center>" ) 