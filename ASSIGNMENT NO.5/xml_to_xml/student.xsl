<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="xml" indent="yes"/>

    <xsl:template match="/">
        <studentList>
            <xsl:for-each select="students/student">
                <person>
                    <fullName><xsl:value-of select="name"/></fullName>
                    <contact>
                        <email><xsl:value-of select="email"/></email>
                        <phone><xsl:value-of select="phone"/></phone>
                        <address><xsl:value-of select="address"/></address>
                    </contact>
                </person>
            </xsl:for-each>
        </studentList>
    </xsl:template>
</xsl:stylesheet>
