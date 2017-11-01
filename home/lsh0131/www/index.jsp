<%@ page contentType="text/html;charset=utf-8" import="java.sql.*"%>
<%
	Class.forName("com.mysql.jdbc.Driver");

	String DB_URL="jdbc:mysql//localhost/test"

	String DB_USER="lsh0131";
	String DB_PASSWORD="gi757001!!";

	Connection conn=null;
	Statement stmt=null;
	ResultSet rs=null;

	try{
		conn = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWORD);

		stmt = conn.createStatement();

		String query="SELECT * from test";

		rs = stmt.executeQuery(query);

%>
<table border="1" cellspacing="0">
	<tr>
		<td> 아파트 번호 </td>
		<td> 동 </td>
		<td> 호 </td>
	</tr>
	<%
	 while(rs.next()){
	%>
	<tr>
		<td><%=rs.getInt("apart_num")%></td>
		<td><%=rs.getInt("apart_dong")%></td>
		<td><%=rs.getInt("apart_ho")%></td>
	</tr>
<%
}
%>
</table>
<%
	rs.close();
	stmt.close();
	conn.close();
	}catch(SQLException e){
		out.println("err:"+e.toString());
	}
%>
