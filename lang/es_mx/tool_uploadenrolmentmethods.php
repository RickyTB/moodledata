<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_uploadenrolmentmethods', language 'es_mx', branch 'MOODLE_39_STABLE'
 *
 * @package   tool_uploadenrolmentmethods
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortnotfound'] = 'Cohorte no encontrada.';
$string['csvcomment'] = '{$a->line} {$a->linenum} [Comment]: {$a->skipped}.';
$string['csvfile'] = '';
$string['csvfile_help'] = 'El formato del archivo CSV debe ser como sigue:

* Cada línea del archivo contiene un registro.
* Cada registro es una serie de datos en un orden fijo separados por comas o algún otro delimitador estándar
* Los campos son: operation, enrolment method, target course shortname, parent course shortname or cohort idnumber, disabled status, group name[, role] (operación, método de inscripción, nombre_corto de curso destino, nombre_corto de curso paterno o númeroID de cohorte, estado_deshabilitado, nombre_del_grupo[, rol]).
* Todos los campos son obligatorios excepto group (grupo) y role (rol).
* Las operaciones permitidas son add, del upd; que corresponden a añadir, eliminar y actualizar
* Los métodos de inscripción soportados son meta y cohorte.
* Los valores de estados deshabilitado son 1 (deshabilitado) y 0 (habilitado).
* Los estudiantes inscritos vía el método serán colocados en el grupo especificado en el campo de nombre del grupo.
   El grupo será creado si no existiera ya.
* El campo de role debe ser un nombre válido de rol como por ejemplo editingteacher, student, etc.';
$string['heading'] = 'Subir métodos de inscripción a curso desde un archivo CSV';
$string['invalidmethod'] = 'Método inválido.';
$string['invalidop'] = 'Operación inválida.';
$string['method'] = 'Método';
$string['methoddisabled'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->methodname}]: {$a->disabled}. {$a->skipped}.';
$string['methoddisabledwarning'] = 'Método de inscripción  "{$a}" deshabilitado.';
$string['methodscreated'] = 'Creado: {$a}';
$string['methodsdeleted'] = 'Eliminado: {$a}';
$string['methodserrors'] = 'Errores: {$a}';
$string['methodstotal'] = 'Total: {$a}';
$string['methodsupdated'] = 'Actualizado: {$a}';
$string['operation'] = 'Operación';
$string['parentnotfound'] = 'Curso Meta enlace no encontrado.';
$string['pluginname'] = 'Subir métodos de inscripción';
$string['pluginname_help'] = 'Subir métodos de inscripción desde un archivo CSV para configurar métodos de inscripción para un rango de cursos en una sola operación.';
$string['privacy:metadata'] = 'La herramienta de administración para Subir inscripciones no almacerna datos personales.';
$string['reladded'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->methodname}]: Curso "{$a->targetname}" ({$a->targetid}) enlazado a "{$a->parentname}" ({$a->parentid}) con nombre "{$a->instancename}". {$a->status}.';
$string['reladderror'] = 'Error enlazando método a curso.';
$string['relalreadyexists'] = 'Método ya enlazado a curso.';
$string['reldeleted'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->methodname}]: Se eliminó el método "{$a->instancename}" de"{$a->targetname}" ({$a->targetid}).';
$string['reldoesntexist'] = 'Método no existe.';
$string['relupdated'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->methodname}]: Actualizado el método "{$a->instancename}" se "{$a->targetname}" ({$a->targetid}). {$a->status}.';
$string['result'] = 'Resultado';
$string['results'] = 'Resultados de métodos de Subir inscripción';
$string['targetisparent'] = 'Método es un padre del curso por lo que no puede ser añadido como su destino.';
$string['targetnotfound'] = 'Curso desconocido';
$string['toofewcols'] = '{$a->line} {$a->linenum}: Demasiado pocas columnas, se esperaban 6/7. {$a->skipped}.';
$string['toomanycols'] = '{$a->line} {$a->linenum}: Demasiadas columnas, se esperaban 6/7. {$a->skipped}.';
$string['unknownrole'] = '{$a->line} {$a->linenum}: [{$a->oplabel} {$a->methodname}]: {$a->unknownrole}. {$a->skipped}.';
