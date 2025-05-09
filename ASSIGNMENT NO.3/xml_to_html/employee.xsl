<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Employee Details</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 20px;
                        text-align: center;
                    }
                    table {
                        border-collapse: collapse;
                        width: 80%;
                        margin: auto;
                    }
                    th, td {
                        border: 1px solid black;
                        padding: 10px;
                        text-align: left;
                    }
                    th {
                        background-color: #f2f2f2;
                        font-weight: bold;
                    }
                </style>
            </head>
            <body>
                <h2>Employee Details</h2>
                <table>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Post</th>
                        <th>Salary</th>
                    </tr>
                    <xsl:for-each select="employees/employee">
                        <tr>
                            <td><xsl:value-of select="employee_id"/></td>
                            <td><xsl:value-of select="first_name"/> <xsl:value-of select="last_name"/></td>
                            <td><xsl:value-of select="department"/></td>
                            <td><xsl:value-of select="post"/></td>
                            <td><xsl:value-of select="salary"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
