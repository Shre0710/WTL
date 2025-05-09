<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="text"/>
    
    <xsl:template match="/">
        <xsl:for-each select="employees/employee">
            Employee ID: <xsl:value-of select="employee_id"/>
            &#10;Name: <xsl:value-of select="first_name"/> <xsl:value-of select="last_name"/>
            &#10;Department: <xsl:value-of select="department"/>
            &#10;Post: <xsl:value-of select="post"/>
            &#10;Salary: <xsl:value-of select="salary"/>
            &#10;&#10;
        </xsl:for-each>
    </xsl:template>
</xsl:stylesheet>
