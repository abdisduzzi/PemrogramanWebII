<?php
require 'Koneksi.php';

function tampildataperpustakaan($tabel)
{
    $stmt = koneksi()->prepare("SELECT * FROM $tabel");
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (!empty($result)) {
        foreach ($result as $row) {
            echo "<tr>";
            if ($tabel == "member") {
                echo "<td>" . $row['nama_member'] . "</td>";
                echo "<td>" . $row['nomor_member'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row["tgl_mendaftar"] . "</td>";
                echo "<td>" . $row["tgl_terakhir_bayar"] . "</td>";
                echo "<td>";
                echo "<a href='FormMember.php?id_member=" . $row['id_member'] . "'>Edit</a>";
                echo " | ";
                echo "<a href='Member.php?id_member=" . $row['id_member'] . "' onclick=\"return confirm('Yakin Ingin Menghapus?')\">Hapus</a>";
                echo "</td>";
            } elseif ($tabel == "buku") {
                echo "<td>" . $row['judul_buku'] . "</td>";
                echo "<td>" . $row['penulis'] . "</td>";
                echo "<td>" . $row['penerbit'] . "</td>";
                echo "<td>" . $row["tahun_terbit"] . "</td>";
                echo "<td>";
                echo "<a href='FormBuku.php?id_buku=" . $row['id_buku'] . "'>Edit</a>";
                echo " | ";
                echo "<a href='Buku.php?id_buku=" . $row['id_buku'] . "' onclick=\"return confirm('Yakin Ingin Menghapus?')\">Hapus</a>";
                echo "</td>";
            } elseif ($tabel == "peminjaman") {
                echo "<td>" . $row["tgl_pinjam"] . "</td>";
                echo "<td>" . $row["tgl_kembali"] . "</td>";
                echo "<td>";
                echo "<a href='FormPeminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "'>Edit</a>";
                echo " | ";
                echo "<a href='Peminjaman.php?id_peminjaman=" . $row['id_peminjaman'] . "' onclick=\"return confirm('Yakin Ingin Menghapus?')\">Hapus</a>";
                echo "</td>";
            }
            echo "</tr>";
        }
    }
}

// Fungsi generik untuk menambahkan data
function tambahdata($tabel, $data)
{
    $fields = implode(", ", array_keys($data));
    $placeholders = ":" . implode(", :", array_keys($data));
    $sql = "INSERT INTO `$tabel` ($fields) VALUES ($placeholders)";
    $stmt = koneksi()->prepare($sql);
    $result = $stmt->execute($data);
    if (!empty($result)) {
        header("location:" . ucfirst($tabel) . ".php");
    }
}

// Fungsi generik untuk mengedit data
function editdata($tabel, $id_name, $id_value)
{
    $stmt = koneksi()->prepare("SELECT * FROM $tabel WHERE $id_name = :id_value");
    $stmt->bindParam(':id_value', $id_value);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

// Fungsi generik untuk memperbarui data
function updatedata($tabel, $data, $id_name, $id_value)
{
    $fields = "";
    foreach ($data as $key => $value) {
        $fields .= "$key = :$key, ";
    }
    $fields = rtrim($fields, ", ");
    $sql = "UPDATE $tabel SET $fields WHERE $id_name = :id_value";
    $stmt = koneksi()->prepare($sql);
    $data['id_value'] = $id_value;
    $result = $stmt->execute($data);
    if ($result) {
        header("location:" . ucfirst($tabel) . ".php");
    }
}

// Fungsi generik untuk menghapus data
function hapusdata($tabel, $id_name, $id_value)
{
    $stmt = koneksi()->prepare("DELETE FROM $tabel WHERE $id_name = :id_value");
    $stmt->bindParam(':id_value', $id_value);
    $result = $stmt->execute();
    if ($result) {
        header("location:" . ucfirst($tabel) . ".php");
    }
}

// MEMBER
function tambahdatamember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar)
{
    tambahdata('member', [
        'nama_member' => $nama,
        'nomor_member' => $nomor,
        'alamat' => $alamat,
        'tgl_mendaftar' => $tgl_mendaftar,
        'tgl_terakhir_bayar' => $tgl_terakhir_bayar
    ]);
}
function editmember()
{
    editdata('member', 'id_member', $_GET['id_member']);
}
function updatemember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_terakhir_bayar)
{
    updatedata('member', [
        'nama_member' => $nama,
        'nomor_member' => $nomor,
        'alamat' => $alamat,
        'tgl_mendaftar' => $tgl_daftar,
        'tgl_terakhir_bayar' => $tgl_terakhir_bayar
    ], 'id_member', $id);
}
function hapusmember($id_member)
{
    hapusdata('member', 'id_member', $id_member);
}

// BUKU
function tambahdatabuku($judul, $penulis, $penerbit, $thn_terbit)
{
    tambahdata('buku', [
        'judul_buku' => $judul,
        'penulis' => $penulis,
        'penerbit' => $penerbit,
        'tahun_terbit' => $thn_terbit
    ]);
}
function editbuku()
{
    editdata('buku', 'id_buku', $_GET['id_buku']);
}
function updatebuku($id, $judul, $penulis, $penerbit, $thn_terbit)
{
    updatedata('buku', [
        'judul_buku' => $judul,
        'penulis' => $penulis,
        'penerbit' => $penerbit,
        'tahun_terbit' => $thn_terbit
    ], 'id_buku', $id);
}
function hapusbuku($id_buku)
{
    hapusdata('buku', 'id_buku', $id_buku);
}

// PEMINJAMAN
function tambahdatapeminjaman($tgl_pinjam, $tgl_kembali)
{
    tambahdata('peminjaman', [
        'tgl_pinjam' => $tgl_pinjam,
        'tgl_kembali' => $tgl_kembali
    ]);
}
function editpeminjaman()
{
    editdata('peminjaman', 'id_peminjaman', $_GET['id_peminjaman']);
}
function updatepeminjaman($id, $tgl_pinjam, $tgl_kembali)
{
    updatedata('peminjaman', [
        'tgl_pinjam' => $tgl_pinjam,
        'tgl_kembali' => $tgl_kembali
    ], 'id_peminjaman', $id);
}
function hapuspeminjaman($id_peminjaman)
{
    hapusdata('peminjaman', 'id_peminjaman', $id_peminjaman);
}