<?xml version="1.0" encoding="ISO-8859-1" ?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>My Catalog</h2>
  <table border="1">
    <tr bgcolor="#9ACD32">
      <th>Title</th>
      <th>Artist</th>
      <th>Year</th>
      <th>Price</th>
    </tr>
  <xsl:for-each select="catalog/album">
  <tr>
    <td><xsl:value-of select="name">/></td>
    <td><xsl:value-of select="artist">/></td>
  </tr>
  </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>