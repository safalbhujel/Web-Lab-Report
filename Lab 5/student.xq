for $s in doc("student.xml")//student
return
    <result>
        <name>{ $s/name/text() }</name>
        <course>{ $s/course/text() }</course>
    </result>