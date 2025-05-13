<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="text"/>
    
    <xsl:template match="/students">
        Student Information:
        ----------------------
        
        <xsl:apply-templates select="student"/>
    </xsl:template>

    <xsl:template match="student">
        <xsl:text>
        Name: </xsl:text><xsl:value-of select="name"/>
        <xsl:text>
        Email: </xsl:text><xsl:value-of select="email"/>
        <xsl:text>
        Phone: </xsl:text><xsl:value-of select="phone"/>
        <xsl:text>
        Address: </xsl:text><xsl:value-of select="address"/>
        <xsl:text>

        </xsl:text>
    </xsl:template>
</xsl:stylesheet>
