<?php


class Vt extends CI_Model
{
    public function insert($from, $data=[])
    {
        $results = $this->db
            ->insert($from, $data);
        return $results;
    }

    public function single($from, $where=[], $sutun=null, $siralama=null)
    {
        $results = $this->db
            ->from($from)
            ->where($where)
            ->order_by($sutun, $siralama)
            ->get()
            ->row();
        return $results;
    }

    public function multiple($from, $where=[], $sutun=null, $siralama=null)
    {
        $results = $this->db
            ->from($from)
            ->where($where)
            ->order_by($sutun, $siralama)
            ->get()
            ->result();
        return $results;
    }

    public function update($from, $where=[], $data=[])
    {
        $results = $this->db
            ->where($where)
            ->update($from, $data);
        return $results;
    }

    public function delete($from, $where, $id)
    {
        $results = $this->db
            ->delete($from, [$where => $id]);
        return $results;
    }

    public function groupby($from, $where, $group, $sutun=null, $siralama=null)
    {
        $results = $this->db
            ->from($from)
            ->where($where)
            ->group_by($group)
            ->order_by($sutun, $siralama)
            ->get()
            ->result();
        return $results;

    }
}