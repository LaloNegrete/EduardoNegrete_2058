package conexionjavaingsii;
import java.sql.*;
public class ConexionJavaIngSII {

    public static void main(String[] args) {
    
    /**
     * Server: On
     * host: localhost || 127.0.0.1
     * puerto: 3306
     * usuario: root
     * Password: 1234
     * nombre Base de datos: fes_ico
     * nombre tabla: Alumno
     **/
    
      String dbHost;
      String dbName;
      String dbUser;
      String dbPassword;
        
      try {
            //1.- Cargar driver tenemos que crear un metodo estatico
           // Class.forName("com.mysql.jdbc.Driver");
            Class.forName("com.mysql.cj.jdbc.Driver");
           // Class.forName("com.mysql.jdbc.Driver");
            //tenemos que definir el medio paqra conectarnos al host 
            dbHost= "jdbc:mysql://localhost:3307/fes_ico";
            //dbName= "fes_ico";
            dbUser= "root";
            dbPassword= "";
            //3.- Establecer nuestra conexion
            Connection conecta = DriverManager.getConnection(dbHost,dbUser,dbPassword);;
            //crear un objeto statement que nos ayudara a hacer la consulta
            Statement st = conecta.createStatement();
            //tenemos que generar nuestra consulta
            //en el resultset nos dirá los resultados que tiene
            ResultSet rs = st.executeQuery("SELECT * FROM alumno");
            
            if (rs.wasNull()) {
                System.out.println("No hay nada en la tabla alumno");
          }
            while(rs.next()){
                System.out.println(rs.getString("nombre_usuario")+" "+rs.getString("carrera")+" "+rs.getString("no_cuenta"));
            }
            rs.close();
            st.close();
            conecta.close();
            
        } catch (Exception a ) {
            System.out.println("Error de conexion "+a);
        }
    }
}
