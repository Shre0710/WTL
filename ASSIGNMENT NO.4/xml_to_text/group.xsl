<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="text"/>
    
    <xsl:template match="/">
        <xsl:for-each select="group/member">
            Name: <xsl:value-of select="name"/>
            &#10;Roll No: <xsl:value-of select="rollno"/>
            &#10;CGPA: <xsl:value-of select="cgpa"/>
            &#10;Role: <xsl:value-of select="role"/>
            &#10;&#10;
        </xsl:for-each>
    </xsl:template>
</xsl:stylesheet>
