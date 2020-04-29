<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : link.xsl
    Created on : April 25, 2020, 6:18 PM
    Author     : Bianca
    Description:
        Purpose of transformation follows.
-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>

    <!-- TODO customize transformation rules 
         syntax recommendation http://www.w3.org/TR/xslt 
    -->
    <xsl:template match="/">
        <html>
            <head>
                <title>Link-uri importante</title>
            </head>
            <body>
                <xsl:element name="a">
                    <xsl:attribute name="href">
                        <xsl:value-of select="root/link1/link_url"/>
                    </xsl:attribute>
                     <span>Upload another image</span>
                </xsl:element>   
                
<br/><br/>
                <xsl:element name="a">
                    <xsl:attribute name="href">
                        <xsl:value-of select="root/link2/address"/>
                    </xsl:attribute>
                <xsl:attribute name="target">    
                    <xsl:value-of select="root/link2/target"/>
                </xsl:attribute>
                <xsl:value-of select="root/link2/link_text"/>
                </xsl:element>  
                
                
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>

