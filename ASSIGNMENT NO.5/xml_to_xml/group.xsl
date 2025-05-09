<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="xml" indent="yes"/>

    <xsl:template match="/">
        <team>
            <xsl:for-each select="group/member">
                <participant>
                    <id><xsl:value-of select="rollno"/></id>
                    <full_name><xsl:value-of select="name"/></full_name>
                    <score><xsl:value-of select="cgpa"/></score>
                    <position><xsl:value-of select="role"/></position>
                </participant>
            </xsl:for-each>
        </team>
    </xsl:template>
</xsl:stylesheet>
