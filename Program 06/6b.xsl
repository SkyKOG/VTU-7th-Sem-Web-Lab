<?xml version="1.0" encoding="utf-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:template match="vtu">
<html><head><title>Program 6b</title></head>
	<body>
		<table border="1">
		<tr><td>VTU Student Data</td></tr>
		<xsl:for-each select="college">
			<tr>
				<td><xsl:value-of select="usn" /></td>
				<td><xsl:value-of select="name" /></td>
				<td><xsl:value-of select="college_name" /></td>
				<td><xsl:value-of select="branch" /></td>
				<td><xsl:value-of select="year" /></td>
				<td><xsl:value-of select="join" /></td>
				<td><xsl:value-of select="email" /></td>
			</tr>
		</xsl:for-each>
		</table>
	</body>
</html>
</xsl:template>
</xsl:stylesheet>
