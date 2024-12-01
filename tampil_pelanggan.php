<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet">
</head>
<body>  
    <!-- <?php
        include "header.php";
    ?> -->

    <h2 class="text-3xl ml-2 rtl:ml-0 font-extrabold dark:text-white">Data Pelanggan</h2>
    <br>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 font-semibold">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 font-bold">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Pelanggan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No Telepon
                    </th>
                    <th scope="col" class="px-6 py-3" colspan="2">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "connection.php";
                    $qry_pelanggan = mysqli_query($conn, "select * from pelanggan");
                    $no = 0;
                    while($dt_pelanggan=mysqli_fetch_array($qry_pelanggan)){
                    $no++;
                ?>

                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-semibold text-gray-900 whitespace-nowrap dark:text-white"><?=$no?></td>
                    <td class="px-6 py-4"><?=$dt_pelanggan['nama_pelanggan']?></td>
                    <td class="px-6 py-4"><?=$dt_pelanggan['alamat']?></td>
                    <td class="px-6 py-4"><?=$dt_pelanggan['telp']?></td>
                    <td class="px-6 py-4">
                        <a href="ubah_pelanggan.php?id_pelanggan=<?=$dt_pelanggan['id_pelanggan']?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ubah</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="hapus.php?id_pelanggan=<?=$dt_pelanggan['id_pelanggan']?>" onclick = "return confirm('Apakah anda yakin menghapus data ini?')" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                    </td>
                </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- <?php
        include "footer.php";
    ?> -->

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>