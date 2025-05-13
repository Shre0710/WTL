<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="xml" indent="yes"/>

    <xsl:template match="/">
        <company>
            <xsl:for-each select="employees/employee">
                <staff>
                    <id><xsl:value-of select="employee_id"/></id>
                    <name>
                        <xsl:value-of select="concat(first_name, ' ', last_name)"/>
                    </name>
                    <division><xsl:value-of select="department"/></division>
                    <designation><xsl:value-of select="post"/></designation>
                    <income><xsl:value-of select="salary"/></income>
                </staff>
            </xsl:for-each>
        </company>
    </xsl:template>
</xsl:stylesheet>
