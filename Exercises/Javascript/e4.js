for(var i=1; i<=20; i++)
{
  var j=1;
  document.write("<tr>");
  while(j <= 20)
  {
    document.write("<td>"+(i*j)+"</td>");
    j++;
  }
  document.write("</tr>");
}