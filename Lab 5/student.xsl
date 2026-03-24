<?xml version="1.0"?>

<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

<html>
<head>
    <title>Student List</title>
</head>

<body>
    <h2>Student Details</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
        </tr>

        <!-- loop through students -->
        <xsl:for-each select="s:students/s:student">
            <tr>
                <td><xsl:value-of select="@id"/></td>
                <td><xsl:value-of select="s:name"/></td>
                <td><xsl:value-of select="s:age"/></td>
                <td><xsl:value-of select="s:course"/></td>
            </tr>
        </xsl:for-each>

    </table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>