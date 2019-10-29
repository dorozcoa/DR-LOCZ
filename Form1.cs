// Instancio las Directivas.
using System;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;
 
namespace crud
{
    public partial class frmProductos : Form
    {
        // Realizo la Conexi�n a la Base de Datos
        string connectionString = @"Server=.\sqlexpress;Database=productos;Trusted_Connection=True;";
        bool nuevo;
 
        public frmProductos()
        {
            InitializeComponent();
        }
 
        // Cargo el Formulario y su estado para cada elemento.
        private void frmProductos_Load(object sender, EventArgs e)
        {
            tsbNuevo.Enabled = true;
            tsbGuardar.Enabled = false;
            tsbCancelar.Enabled = false;
            tsbEliminar.Enabled = false;
            txtId.Enabled = true;
            tsbBuscar.Enabled = true;
            txtNombre.Enabled = false;
            txtPrecio.Enabled = false;
        }
 
        private void txtId_TextChanged(object sender, EventArgs e)
        {
 
        }
 
        private void tsbNuevo_Click(object sender, EventArgs e)
        {
            // Cargo el estado para el bot�n Nuevo y los dem�s elementos.
            tsbNuevo.Enabled = false;
            tsbGuardar.Enabled = true;
            tsbCancelar.Enabled = true;
            tsbEliminar.Enabled = false;
            tstId.Enabled = false;
            tsbBuscar.Enabled = false;
            txtNombre.Enabled = true;
            txtPrecio.Enabled = true;
            txtStock.Enabled = true;
            txtNombre.Focus();
            nuevo = true;
        }
 
        private void tsbGuardar_Click(object sender, EventArgs e)
        {
            // Cuando hago click en el bot�n Nuevo que proceda la inserci�n de un registro en la Base de Datos.
            if (nuevo)
            {
                string sql = "INSERT INTO POSTRES (ID, NOMBRE, PRECIO, STOCK)"
                          + "VALUES ('" + txtId.Text + "', '" + txtNombre.Text + "', '" + txtPrecio.Text + "', '" + txtStock.Text + "')";
 
                SqlConnection con = new SqlConnection(connectionString);
                SqlCommand cmd = new SqlCommand(sql, con);
                cmd.CommandType = CommandType.Text;
                con.Open();
                try
                {
                    int i = cmd.ExecuteNonQuery();
                    if (i > 0)
                        MessageBox.Show("Registro ingresado correctamente !");
                }
                catch (Exception ex)
                {
                    MessageBox.Show("Erro: " + ex.ToString());
                }
                finally
                {
                    // Cierro la Conexi�n.
                    con.Close();
                }
            }
            else
            {
                // Procedo a realizar la actualizaci�n del registro en la Base de Datos.
                string sql = "UPDATE POSTRES SET NOMBRE='" + txtNombre.Text +
                    "', PRECIO='" + txtPrecio.Text +
                    "', " + "STOCK='" + txtStock.Text + "' WHERE id=" + txtId.Text + "";
 
                SqlConnection con = new SqlConnection(connectionString);
                SqlCommand cmd = new SqlCommand(sql, con);
                cmd.CommandType = CommandType.Text;
                con.Open();
                try
                {
                    int i = cmd.ExecuteNonQuery();
                    if (i > 0)
                        MessageBox.Show("Registro actualizado correctamente !");
                }
                catch (Exception ex)
                {
                    MessageBox.Show("Erro: " + ex.ToString());
                }
                finally
                {
                    // Cierro la Conexi�n.
                    con.Close();
                }
            }
 
            // Defino los Estados para los elementos de mi Formulario despu�s de actualizar el registro.
            tsbNuevo.Enabled = true;
            tsbGuardar.Enabled = false;
            tsbCancelar.Enabled = false;
            tsbEliminar.Enabled = false;
            tstId.Enabled = true;
            tsbBuscar.Enabled = true;
            txtNombre.Enabled = false;
            txtPrecio.Enabled = false;
            txtStock.Enabled = false;
            txtId.Text = "";
            txtNombre.Text = "";
            txtPrecio.Text = "";
            txtStock.Text = "";
        }
 
        private void tsbCancelar_Click(object sender, EventArgs e)
        {
            // Defino los Estados para los elementos de mi Formulario cuando hago click en el bot�n Cancelar.
            tsbNuevo.Enabled = true;
            tsbGuardar.Enabled = false;
            tsbCancelar.Enabled = false;
            tsbEliminar.Enabled = false;
            tstId.Enabled = true;
            tsbBuscar.Enabled = true;
            txtNombre.Enabled = false;
            txtPrecio.Enabled = false;
            txtStock.Enabled = false;
            txtId.Text = "";
            txtNombre.Text = "";
            txtPrecio.Text = "";
            txtStock.Text = "";
        }
 
        private void tsbEliminar_Click(object sender, EventArgs e)
        {
            // Si hago click en el bot�n eliminar procedo a eliminar en la Base de Datos.
            string sql = "DELETE FROM POSTRES WHERE ID=" + txtId.Text;
 
            SqlConnection con = new SqlConnection(connectionString);
            SqlCommand cmd = new SqlCommand(sql, con);
            cmd.CommandType = CommandType.Text;
            con.Open();
 
            try
            {
                int i = cmd.ExecuteNonQuery();
                if (i > 0)
                    MessageBox.Show("Registro eliminado correctamente !");
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro: " + ex.ToString());
            }
            finally
            {
                // Cierro la Conexi�n.
                con.Close();
            }
 
            // Defino los Estados para los elementos de mi Formulario cuando hago click en el bot�n Eliminar.
            tsbNuevo.Enabled = true;
            tsbGuardar.Enabled = false;
            tsbCancelar.Enabled = false;
            tsbEliminar.Enabled = false;
            tstId.Enabled = true;
            tsbBuscar.Enabled = true;
            txtNombre.Enabled = false;
            txtPrecio.Enabled = false;
            txtStock.Enabled = false;            
            txtId.Text = "";
            txtNombre.Text = "";            
            txtPrecio.Text = "";
            txtStock.Text = "";
        }
 
        private void tsbBuscar_Click(object sender, EventArgs e)
        {
            // Cuando hago click en el bot�n Buscar, procedo a buscar en la Base de Datos.
            string sql = "SELECT * FROM POSTRES WHERE ID=" + tstId.Text;
 
            SqlConnection con = new SqlConnection(connectionString);
            SqlCommand cmd = new SqlCommand(sql, con);
            cmd.CommandType = CommandType.Text;
            SqlDataReader reader;
            con.Open();
 
            try
            {
                reader = cmd.ExecuteReader();
                if (reader.Read())
                {
                    // Defino los Estados para los elementos de mi Formulario cuando hago click en el bot�n Buscar.
                    tsbNuevo.Enabled = false;
                    tsbGuardar.Enabled = true;
                    tsbCancelar.Enabled = true;
                    tsbEliminar.Enabled = true;
                    tstId.Enabled = false;
                    tsbBuscar.Enabled = false;
                    txtNombre.Enabled = true;
                    txtPrecio.Enabled = true;
                    txtStock.Enabled = true;
                    txtNombre.Focus();
                    txtId.Text = reader[0].ToString();
                    txtNombre.Text = reader[1].ToString();
                    txtPrecio.Text = reader[2].ToString();
                    txtStock.Text = reader[3].ToString();
                    nuevo = false;
                }
                else
                    MessageBox.Show("Ningun registro encontrado con el Id ingresado !");
            }
            catch (Exception ex)
            {
                MessageBox.Show("Erro: " + ex.ToString());
            }
            finally
            {
                // Cierro la Conexi�n.
                con.Close();
            }
 
            tstId.Text = "";
 
        }
 
        private void toolStrip1_ItemClicked(object sender, ToolStripItemClickedEventArgs e)
        {
 
        }
 
        private void btnSalir_Click(object sender, EventArgs e)
        {
            // Cuando hago click en el bot�n Salir cierro el formulario.
            this.Close();
        }
    }
}