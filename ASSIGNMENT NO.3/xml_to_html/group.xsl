<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Group Members</title>
                <style>
                    body { font-family: Arial, sans-serif; margin: 20px; background-color: #f8f9fa; }
                    table { border-collapse: collapse; width: 60%; margin: auto; background-color: white; box-shadow: 2px 2px 10px gray; }
                    th, td { border: 1px solid black; padding: 10px; text-align: center; font-size: 16px; }
                    th { background-color: #007BFF; color: white; font-weight: bold; }
                    h2 { text-align: center; font-size: 24px; color: #333; font-weight: bold; margin-top: 20px; }
                    .leader-text { color: red; font-weight: bold; }
                </style>
            </head>
            <body>
                <h2>Group Members</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Roll No</th>
                        <th>CGPA</th>
                        <th>Role</th>
                    </tr>
                    <xsl:for-each select="group/member">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="rollno"/></td>
                            <td><xsl:value-of select="cgpa"/></td>
                            <td>
                                <xsl:choose>
                                    <xsl:when test="role='Leader'">
                                        <span class="leader-text"><xsl:value-of select="role"/></span>
                                    </xsl:when>
                                    <xsl:otherwise>
                                        <xsl:value-of select="role"/>
                                    </xsl:otherwise>
                                </xsl:choose>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
