// Objeto JSON
const data = {
    nombre: "Juan",
    edad: 30,
    profesion: "Desarrollador"
  };
  
  
  // Convertir el objeto JSON a formato de texto
  const jsonContent = JSON.stringify(data);
  writeFile(filePath, jsonContent, 'utf8', function (err) {
    if (err) {
      console.error("Error al escribir el archivo:", err);
    } else {
      console.log("Archivo guardado exitosamente.");
    }
  });
  // Crear un enlace de descarga
  const downloadLink = document.createElement('a');
  downloadLink.href = 'data:text/json;charset=utf-8,' + encodeURIComponent(jsonContent);
  downloadLink.download = '1.json';
  
  // Simular el clic en el enlace de descarga
  downloadLink.click();
  

/* const fs = require('fs');

// Objeto JSON
const data = {
  nombre: "Juan",
  edad: 30,
  profesion: "Desarrollador"
};

// Convertir el objeto JSON a formato de texto
const jsonContent = JSON.stringify(data);

// Especificar la ruta y el nombre de archivo
const filePath = '1.json';

// Escribir el contenido en el archivo
fs.writeFile(filePath, jsonContent, 'utf8', function (err) {
  if (err) {
    console.error("Error al escribir el archivo:", err);
  } else {
    console.log("Archivo guardado exitosamente.");
  }
});
 */